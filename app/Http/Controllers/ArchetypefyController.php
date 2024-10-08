<?php

namespace App\Http\Controllers;

use App\Models\Comportamentos;
use App\Models\Customer;
use App\Models\Questions;
use App\Models\Temperamentos;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

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

        $email = session('email'); // Recupera a variável 'email'
        $whoIs = session('whoIs'); // Recupera a variável 'adm'

        //Se não tiver email, volta para o login
        if(!$email){
            return redirect()->route('login')->with('error', 'Sua sessão expirou, por favor, faça login novamente!');
        }

        // Verifica se o email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('login')->with('error', 'Email inválido');
        }

        return view('layouts.confirmCode')->with(
            [
                'email' => $email,
                'whoIs' => $whoIs
            ]
        );
    }

    public function Dashboard(Request $request) {
        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        } else {
            $user = Auth::user();
            $userID = $user->id;
            $fullName = $user->name;

            $firstName = strtok($fullName, " ");

            session(['firstName' => $firstName]);
            session(['userID' => $userID]);

            $lastQuestion = Questions::where('user_id', $userID)->first();
            $lastTemper = Temperamentos::where('user_id', $userID)->first();
            $lastComportamento = Comportamentos::where('user_id', $userID)->first();

            // Passa informação sobre pagamento dos testes
                $verificaCompra = Customer::where('email', $user->email)->first();
                if(empty($verificaCompra)) {
                    // Não faz nada
                } else {
                    session(
                        [
                            'permiteArquetipos' => $verificaCompra->arquetipos,
                            'permiteTemperamentos' => $verificaCompra->temperamentos,
                            'permiteComportamental' => $verificaCompra->comportamental
                        ]
                    );
                };
            // Passa informação sobre pagamento dos testes

            if (empty($lastQuestion)) {
                // Informa que não tem teste iniciado
                $firstNullColumn = 0;
                session(['firstNullColumn' => $firstNullColumn]);
            } else {
                $firstTime = $lastQuestion->times_exec; //Verifica se é a primeira vez

                if(empty($firstTime)){
                    $columnNames = array_keys($lastQuestion->getAttributes());
                    $firstNullColumn = null;

                    foreach ($columnNames as $column) {
                        if ($lastQuestion->$column == null) {
                            $firstNullColumn = $column;
                            session(['firstNullColumn' => $firstNullColumn]);
                            break;
                        }
                    }
                } else {
                    $firstNullColumn = 'result';
                    session(['firstNullColumn' => $firstNullColumn]);
                }
            }

            if (empty($lastTemper)) {
                // Informa que não tem teste iniciado
                $firstNullColumnTemper = 0;
                session(['firstNullColumnTemper' => $firstNullColumnTemper]);
            } else {
                $firstTime = $lastTemper->times_exec; //Verifica se é a primeira vez

                if(empty($firstTime)){
                    $columnNames = array_keys($lastTemper->getAttributes());
                    $firstNullColumnTemper = null;

                    foreach ($columnNames as $column) {
                        if ($lastTemper->$column == null) {
                            $firstNullColumnTemper = $column;
                            session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                            break;
                        }
                    }
                } else {
                    $firstNullColumnTemper = 'resultTemper';
                    session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                }
            }

            if (empty($lastComportamento)) {
                // Informa que não tem teste iniciado
                $firstNullColumnComportamento = 0;
                session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
            } else {
                $firstTime = $lastComportamento->times_exec; //Verifica se é a primeira vez

                if(empty($firstTime)){
                    $columnNames = array_keys($lastComportamento->getAttributes());
                    $firstNullColumnComportamento = null;

                    foreach ($columnNames as $column) {
                        if ($lastComportamento->$column == null) {
                            $firstNullColumnComportamento = $column;
                            session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
                            break;
                        }
                    }
                } else {
                    $firstNullColumnComportamento = 'resultComp';
                    session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
                }
            }

            return view('layouts/dashboard');
        }
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
                'CPF' => 'required|string|max:14',
                'mobile' => 'required|string|max:15',
                'temperamentos' => 'required|boolean',
                'comportamental' => 'required|boolean',
                'arquetipos' => 'required|boolean',
            ]);
            // Atualiza usuário
            $user = $request->all();

            // Busca o cliente pelo ID
            $userID = $user['id'];

            try {
                $customer = Customer::findOrFail($userID);

                // Atualiza os dados do cliente
                $customer->update($user);

                return redirect()->route('configDashboard')->with([
                    'success' => 'Dados do usuário atualizados com sucesso!',
                    'customer' => $customer
                ]);

            } catch (ModelNotFoundException $e) {
                // Cliente não encontrado
                return redirect()->route('configDashboard')->with('error', 'Usuário não encontrado!');

            } catch (Exception $e) {
                // Outra exceção durante a atualização
                return redirect()->route('configDashboard')->with('error', 'Erro ao atualizar os dados do usuário, tente novamente!');
            }
        }
    }
    public function BuscaUser(Request $request)
    {
        if (Auth::guest()) {
            // Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        } else {
            // Fatora as informações do usuário
            $userEmail = $request->email;
            $userCPF = preg_replace('/\D/', '',$request->CPF); // Remove tudo que não é número

            // Verifica se ambos os campos estão vazios
            if (empty($userEmail) && empty($userCPF)) {
                // Buscar todos os usuários
                $customers = Customer::paginate(4);

                return redirect()->route('configDashboard', compact('customers'))->with('error', 'Por favor, forneça um email ou CPF para busca.');
            }

            $customer = Customer::where('email', $userEmail)->first();

            if ($customer) {
                return redirect()->route('configDashboard')->with(
                    [
                        'success' => 'Usuário encontrado!',
                        'customer' => $customer
                    ]
                );
            }

            $customer = Customer::where('CPF', $userCPF)->first();

            if ($customer) {
                return redirect()->route('configDashboard')->with(
                    [
                        'success' => 'Usuário encontrado!',
                        'customer' => $customer
                    ]
                );
            }

            // Se nenhum cliente foi encontrado, redireciona com erro
            // Buscar todos os usuários
            $customers = Customer::paginate(4);
            return redirect()->route('configDashboard', compact('customers'))->with('error', 'Usuário não encontrado!');
        }
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
        $customers = Customer::latest()->first();
        // Redireciona com mensagem de sucesso
        return redirect()->route('configDashboard', compact('customers'))->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function OkDelete($id)
    {
        // Array de IDs que não podem ser excluídos
        $nonDeletableIds = [1, 2, 5, 8]; // Adicione os IDs que não podem ser excluídos

        // Verifica se o ID do usuário está no array de IDs não permitidos
        if (in_array($id, $nonDeletableIds)) {
            return redirect()->route('configDashboard')->with('error', 'Este usuário não pode ser excluído.');
        }

        $customerName = ''; // Inicializa a variável para armazenar o nome do cliente

        try {
            // Inicia uma transação
            DB::transaction(function () use ($id, &$customerName) {
                // Encontra o cliente a ser excluído
                $okCustomerDeleted = Customer::findOrFail($id);
                $customerName = $okCustomerDeleted->full_name; // Armazena o nome do cliente

                // Encontra o usuário correspondente
                $okUserDeleted = User::where('email', $okCustomerDeleted->email)->first();

                // Deleta o usuário se existir
                if ($okUserDeleted) {
                    // Deleta as relações do cliente
                    Questions::where('user_id', $okUserDeleted->id)->delete();
                    Temperamentos::where('user_id', $okUserDeleted->id)->delete();
                    Comportamentos::where('user_id', $okUserDeleted->id)->delete();

                    $okUserDeleted->delete();
                }

                // Deleta o cliente
                $okCustomerDeleted->delete();
            });

            return redirect()->route('configDashboard')->with('success', 'Usuário ' . $customerName . ' e suas informações foram excluídos com sucesso!');
        } catch (QueryException $e) {
            // Lida com exceções de consulta
            Log::error('Erro ao excluir usuário: ' . $e->getMessage());

            // Redireciona com uma mensagem de erro
            return redirect()->route('configDashboard')->with('error', 'Ocorreu um erro ao excluir o usuário. Por favor, tente novamente mais tarde.');
        } catch (\Exception $e) {
            // Lida com outras exceções
            Log::error('Erro inesperado ao excluir usuário: ' . $e->getMessage());

            // Redireciona com uma mensagem de erro
            return redirect()->route('configDashboard')->with('error', 'Ocorreu um erro inesperado ao excluir o usuário ' . $customerName . '. Por favor, tente novamente mais tarde.');
        }
    }

    public function ConfirmDeleteUser()
    {
        // Retorna a view de confirmação passando o usuário
        return view('layouts.confirmDeleteUser');
    }
    // Método para excluir um usuário
    public function DeleteUser($id)
    {

        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            return redirect()->route('login')->with('error', 'Sua sessão expirou, faça login novamente!');
        } else {
            $allowedUserIds = [1, 2, 5, 8]; // IDs dos usuários permitidos
            $user = Auth::user();
            $userID = $user->id;

            if (!in_array($userID, $allowedUserIds)) {
                return redirect()->route('dashboard')->with('error', 'Você não tem permissão para excluir qualquer usuário!');
            } else {
                // Encontra o usuário pelo ID
                $customerId = Customer::find($id);

                // Verifica se o usuário existe
                if (!$customerId) {
                    return redirect()->route('configDashboard')->with('error', 'Usuário não encontrado.');
                }

                // Retorna a view de confirmação passando o usuário
                return redirect()->route('confirmDeleteUser')->with(
                    [
                        'customerId' => $customerId
                    ]
                );
            }
        }
    }
    public function Atention() {
        return view('layouts/atention');
    }

    public function StartTest() {
        return view('layouts/startTest');
    }

    public function store(Request $request) {
        // Recebe email digitado
        $email = $request->email;

        //Se não tiver email, volta para o login
        if(!$email){
            return redirect()->route('login')->with('error', 'Sua sessão expirou, por favor, faça login novamente!');
        }

        // Verifica se o email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('login')->with('error', 'Email inválido');
        }

        // Verifica se o email existe no banco de dados Kiwify
        $user = Customer::where('email', $email)->first();

        if ($user) {
            // Salva o email na sessão
            session(['email' => $email]);

            // Passa o nome para o e-mail
            $userName = $user->first_name;

            $newUserName = $user->full_name;
            $newUserEmail = $user->email;
            $newUserMobile = $user->mobile;

            // Verifica se o email existe no banco de dados local
            $user = User::where('email', $email)->first();

            if ($user) {
                // Verifica se é um admin
                $allowedUserIds = [1, 2, 5, 8]; // IDs dos usuários permitidos

                if (in_array($user->id, $allowedUserIds)) {
                    // Verifica se tem senha cadastrada
                    $passwordNow = $user->password;

                    if($passwordNow == 123){
                        // Se for ADM e a senha for 123, solicita para criar uma nova senha
                        $whoIs = 'admNoPassword';

                        return redirect()->route('confirmCode')->with(
                            [
                                'user' => $user,
                                'whoIs' => $whoIs
                            ]
                        );
                    } else {
                        // Se for ADM solicita senha
                        $whoIs = 'adm';

                        return redirect()->route('confirmCode')->with(
                            [
                                'user' => $user,
                                'whoIs' => $whoIs
                            ]
                        );
                    }
                } else {
                    // Gera uma sequência de 4 números aleatórios
                    $confirmCode =  array_map('strval', array_map('rand', array(0, 1, 2, 3), array(4, 5, 6, 7)));
                    $confirmCode = implode('', $confirmCode);

                    // Atualiza a senha do usuário
                    $user->password = Hash::make($confirmCode);
                    $user->save();

                    \Illuminate\Support\Facades\Mail::to($email)->send(
                        new \App\Mail\SecuryCode($userName, $confirmCode)
                    );

                    // return view('layouts/confirmCode')->with(['email' => $email]);
                    $whoIs = 'normalUser';

                    return redirect()->route('confirmCode')->with(
                        [
                            'whoIs' => $whoIs,
                            'user' => $user
                        ]
                    );
                }
            } else {
                // Gera uma sequência de 4 números aleatórios
                $confirmCode =  array_map('strval', array_map('rand', array(0, 1, 2, 3), array(4, 5, 6, 7)));
                $confirmCode = implode('', $confirmCode);

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
