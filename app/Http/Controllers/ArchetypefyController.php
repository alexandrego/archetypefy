<?php

namespace App\Http\Controllers;

use App\Models\Comportamentos;
use App\Models\Customer;
use App\Models\Questions;
use App\Models\Temperamentos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ArchetypefyController extends Controller
{
    public function Index() {

        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            // return redirect()->route('login')->with('error', 'Preencha todos os dados');
        } else {
            return view('layouts/dashboard');
        }

        return view('layouts/index');
    }
    public function ConfirmCode(Request $request) {

        $email = $request->email;
        $email = session('sessionEmail');

        if(!$email){
            //Se não tiver email, volta para o login
            return redirect()->route('login')->with('error', 'Código Inválido!');
        }

        // return view('layouts/confirmCode')->with('error', 'Preencha todos os dados');
        return view('layouts/confirmCode')->with('email', $email);
    }

    public function Dashboard(Request $request)
    {
        if (Auth::guest()) {
            // Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        }

        $user = Auth::user();
        $userID = $user->id;
        $fullName = $user->name;
        $firstName = strtok($fullName, " ");

        // Definindo sessões
        session(['firstName' => $firstName, 'userID' => $userID]);

        // Obtendo os últimos dados dos testes
        $lastQuestion = Questions::where('user_id', $userID)->first();
        $lastTemper = Temperamentos::where('user_id', $userID)->first();
        $lastComportamento = Comportamentos::where('user_id', $userID)->first();

        // Verifica o status de cada teste
        $checkTest = Customer::findOrFail($userID);
        session(['checkArquetipos' => $checkTest->arquetipos]);
        session(['checkTemperamentos' => $checkTest->temperamentos]);
        session(['checkComportamental' => $checkTest->comportamental]);

        // Verificação e definição de colunas nulas para o último Question
        $firstNullColumn = $this->getFirstNullColumn($lastQuestion, 'result');
        session(['firstNullColumn' => $firstNullColumn]);

        // Verificação e definição de colunas nulas para o último Temperamentos
        $firstNullColumnTemper = $this->getFirstNullColumn($lastTemper, 'resultTemper', ['temper1', 'temper2']);
        session(['firstNullColumnTemper' => $firstNullColumnTemper]);

        // Verificação e definição de colunas nulas para o último Comportamentos
        $firstNullColumnComportamento = $this->getFirstNullColumn($lastComportamento, 'resultComportamento', ['comportamento1', 'comportamento2']);
        session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);

        // return view('layouts/dashboard');
        return redirect()->route('dashboard');
    }

    /**
     * Obtém o nome da primeira coluna nula ou retorna o valor padrão se não houver colunas nulas.
     *
     * @param  mixed  $model
     * @param  string  $default
     * @param  array   $excludeColumns
     * @return string
     */
    private function getFirstNullColumn($model, $default, $excludeColumns = [])
    {
        if (is_null($model)) {
            return 'nao_iniciado_' . $default;
        }

        foreach ($model->getAttributes() as $column => $value) {
            if (is_null($value) && !in_array($column, $excludeColumns)) {
                return $column;
            }
        }

        return $default;
    }

    public function ConfigDashboard(Request $request)
    {
        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        } else {
            // Buscar todos os usuários
             $customers = Customer::paginate(4);

            return view('layouts/configDashboard', compact('customers'));
        }

    }

    public function UpdateUser(Request $request)
    {
        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        } else {
             // Validação dos dados recebidos
            $request->validate([
                'full_name' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'email' => 'required|email|unique:customers,email,' . $request->id,
                'CPF' => 'required|string|max:14', // Ajuste conforme necessário
                'mobile' => 'required|string|max:15', // Ajuste conforme necessário
                'temperamentos' => 'required|boolean',
                'comportamental' => 'required|boolean',
                'arquetipos' => 'required|boolean',
            ]);
            // Atualiza usuário
            $user = $request->all();

            // Busca o cliente pelo ID
            $userID = $user['id'];
            $customer = Customer::findOrFail($userID);

            // Atualiza os dados do cliente
            $customer->update($user);

            // Retorna os dados do usuário atualizados
            return redirect()->route('configDashboard')
                                ->with('customer', $customer)
                                ->with('success', 'Dados do usuário atualizados com sucesso!');
        }
    }
    public function BuscaUser(Request $request)
    {
        if (Auth::guest()) {
            // Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        }

        // Fatora as informações do usuário
        $userEmail = $request->input('email');
        $userCPF = preg_replace('/\D/', '', $request->input('CPF')); // Remove tudo que não é número

        // Verifica se ambos os campos estão vazios
        if (empty($userEmail) && empty($userCPF)) {
            // Buscar todos os usuários
            $customers = Customer::paginate(4);
            return redirect()->route('configDashboard')
                            ->with('customers', $customers)
                            ->with('error', 'Por favor, forneça um email ou CPF para busca.');
        }

        // Primeiro verifica pelo CPF
        $customer = Customer::where('CPF', $userCPF)->first();

        if ($customer) {
            return redirect()->route('configDashboard')
                            ->with('customer', $customer)
                            ->with('success', 'Usuário encontrado!');
        }

        // Se não encontrado pelo CPF, verifica pelo email
        $customer = Customer::where('email', $userEmail)->first();

        if ($customer) {
            return redirect()->route('configDashboard')
                            ->with('customer', $customer)
                            ->with('success', 'Usuário encontrado!');
        }

        // Se nenhum cliente foi encontrado, buscar todos os usuários
        $customers = Customer::paginate(4);
        return redirect()->route('configDashboard')
                        ->with('customers', $customers)
                        ->with('error', 'Usuário não encontrado!');
    }

    public function SaveUser(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'full_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'CPF' => 'required|string|max:14|unique:customers,CPF',
            'mobile' => 'required|string|max:15',
            'temperamentos' => 'required|boolean',
            'comportamental' => 'required|boolean',
            'arquetipos' => 'required|boolean',
        ]);

        // Cria um novo cliente
        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->first_name = $request->first_name;
        $customer->email = $request->email;
        $customer->CPF = preg_replace('/\D/', '',$request->CPF); // Remove tudo que não é número
        $customer->mobile = $request->mobile;
        $customer->temperamentos = $request->temperamentos;
        $customer->comportamental = $request->comportamental;
        $customer->arquetipos = $request->arquetipos;
        $customer->save();

        // Busca o último usuário cadastrado
        $customer = Customer::latest()->first();
        // Redireciona com mensagem de sucesso
        return redirect()->route('configDashboard')
                                ->with('customer', $customer)
                                ->with('success', 'Usuário cadastrado com sucesso!');
    }
    public function Atention() {
        return view('layouts/atention');
    }

    public function StartTest() {
        return view('layouts/startTest');
    }

    // public function MailCode(Request $request) {
    //     $email = $request->email;
    //     dd($email);
    //     // $email    = session('email');
    //      // Verifica se o email está vazio
    //     if (empty($email)) {
    //         return redirect()->route('login')->with('error', 'O email não pode estar vazio.');
    //     }

    //     \Illuminate\Support\Facades\Mail::to($email)->send(
    //         new \App\Mail\SecuryCode()
    //     );

    //     return view('layouts/confirmCode');
    // }

    public function store(Request $request) {

        // Recebe o e-mail digitado
        $email   = $request->email;

        // Verifica se o email existe no banco de dados
        $user = Customer::where('email', $email)->first();

        if ($user) {
            // Gera uma sequência de 4 números aleatórios
            $confirmCode =  array_map('strval', array_map('rand', array(0, 1, 2, 3), array(4, 5, 6, 7)));
            $confirmCode = implode('', $confirmCode);

            // Passa o nome para o e-mail
            $userName = $user->first_name;

            $newUserName = $user->full_name;
            $newUserEmail = $user->email;
            $newUserMobile = $user->mobile;

            // Verifica se o email existe no banco de dados
            $user = User::where('email', $email)->first();

            if ($user) {
                // Atualiza a senha do usuário
                $user->password = Hash::make($confirmCode);
                $user->save();

                \Illuminate\Support\Facades\Mail::to($email)->send(
                    new \App\Mail\SecuryCode($userName, $confirmCode)
                );

                return view('layouts/confirmCode')->with(['email' => $email]);
            } else {
                $lead = new User();

                $lead->name = $newUserName;
                $lead->email = $newUserEmail;
                $lead->mobile = $newUserMobile;
                $lead->password = Hash::make($confirmCode);
                $lead->save();

                \Illuminate\Support\Facades\Mail::to($email)->send(
                    new \App\Mail\SecuryCode($userName, $confirmCode)
                );

                return view('layouts/confirmCode');
            }


        } else {
            $email   = $request->email;
            return redirect('/')->with('error', 'Email não encontrado!');
        }
    }
}
