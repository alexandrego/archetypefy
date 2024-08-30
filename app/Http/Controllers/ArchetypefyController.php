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

        // // Busca os temperamentos
        // $temperamentos = Temperamentos::all();

        // // Busca os comportamentos
        // $comportamentos = Comportamentos::all();

        // // Retorna a view com os temperamentos e comportamentos
        // return view('layouts/confirmCode', compact('temperamentos', 'comportamentos'));

        // Recebe email digitado
        // $email = $request->email;

        $email = session('email'); // Recupera a variável 'email'
        $whoIs = session('whoIs'); // Recupera a variável 'adm'

        // $email = session('sessionEmail');

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

        // if(!$email && !$email1 && !$user){
        //     //Se não tiver email, volta para o login
        //     return redirect()->route('login')->with('error', 'Sua sessão expirou, por favor, faça login novamente!');
        // }

        //  // Verifica se é um admin
        //  $allowedUserIds = [2, 5, 8]; // IDs dos usuários permitidos

        //  if (in_array($user->id, $allowedUserIds))
        //  {
        //     return redirect()->route('confirmCode')->with(
        //         [
        //             'email' => $email,
        //             'adm' => $user
        //         ]
        //     );
        // } else {
        //     return redirect()->route('confirmCode')->with(
        //         [
        //             'email' => $email,
        //             'usuario' => $user
        //         ]
        //     );
        // }
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

            if (empty($lastQuestion)) {
                // Informa que não tem teste iniciado
                $firstNullColumn = 0;
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

            if ($lastTemper) {
                $columnNamesTemper = array_keys($lastTemper->getAttributes());
                $firstNullColumnTemper = null;

                foreach ($columnNamesTemper as $columnTemper) {
                    if ($lastTemper->$columnTemper === null) {
                        $firstNullColumnTemper = $columnTemper;
                        break;
                    }
                }

                if ($firstNullColumnTemper) {
                    if($firstNullColumnTemper == "temper1"){
                        // Não exiba nada
                    } else if ($firstNullColumnTemper == "temper2"){
                        session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                    }
                } else {
                    $firstNullColumnTemper = 'resultTemper';
                    session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                }
            } else {
                $firstNullColumnTemper = 'nao_iniciado_temper';
                session(['firstNullColumnTemper' => $firstNullColumnTemper]);
            }

            if ($lastComportamento) {
                $columnNamesComportamento = array_keys($lastComportamento->getAttributes());
                $firstNullColumnComportamento = null;

                foreach ($columnNamesComportamento as $columnComportamento) {
                    if ($lastComportamento->$columnComportamento === null) {
                        $firstNullColumnComportamento = $columnComportamento;
                        break;
                    }
                }

                if ($firstNullColumnComportamento) {
                    if($firstNullColumnComportamento == "comportamento1"){
                        // Não exiba nada
                    } else if ($firstNullColumnComportamento == "comportamento2"){
                        session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
                    }
                } else {
                    $firstNullColumnComportamento = 'resultComportamento';
                    session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
                }
            } else {
                $firstNullColumnComportamento = 'nao_iniciado_Comportamento';
                session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
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

        // Verifica se o email já está cadastrado
        // $user = User::where('email', $email)->first();

        // if (!$user) {
        //     return redirect()->route('login')->with('error', 'Email não cadastrado');
        // }

        // Salva o email na sessão
        // session(['email' => $email]);

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

                    if($passwordNow == null){
                        dd('Vamos criar uma nova senha!');
                        return redirect()->route('confirmCode')->with(
                            [
                                'email' => $email,
                                'nome' => $userName
                            ]
                        );
                    } else {
                        // dd('Vamos digitar a senha!');
                        $whoIs = 'adm';

                        return redirect()->route('confirmCode')->with(
                            [
                                'user' => $user,
                                'whoIs' => $whoIs
                            ]
                        );
                    }
                } else {
                    // Atualiza a senha do usuário
                    // $user->password = Hash::make($confirmCode);
                    // $user->save();

                    // \Illuminate\Support\Facades\Mail::to($email)->send(
                    //     new \App\Mail\SecuryCode($userName, $confirmCode)
                    // );

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

        // // Recebe o e-mail digitado
        // $email   = $request->email;

        // // Verifica se o email existe no banco de dados
        // $user = Customer::where('email', $email)->first();

        // if ($user) {
        //     // Gera uma sequência de 4 números aleatórios
        //     $confirmCode =  array_map('strval', array_map('rand', array(0, 1, 2, 3), array(4, 5, 6, 7)));
        //     $confirmCode = implode('', $confirmCode);

        //     // Passa o nome para o e-mail
        //     $userName = $user->first_name;

        //     $newUserName = $user->full_name;
        //     $newUserEmail = $user->email;
        //     $newUserMobile = $user->mobile;

        //     // Verifica se o email existe no banco de dados
        //     $user = User::where('email', $email)->first();

        //     if ($user) {
        //         // Verifica se é um admin
        //         $allowedUserIds = [2, 5, 8]; // IDs dos usuários permitidos

        //         if (in_array($user->id, $allowedUserIds)) {
        //             // Verifica se tem senha cadastrada
        //             $passwordNow = $user->password;

        //             if($passwordNow == null){
        //                 dd('Vamos criar uma nova senha!');
        //                 return redirect()->route('confirmCode')->with(
        //                     [
        //                         'email' => $email,
        //                         'nome' => $userName
        //                     ]
        //                 );
        //             } else {
        //                 // dd('Vamos digitar a senha!');

        //                 return redirect()->route('confirmCode')->with(
        //                     [
        //                         'adm' => $user,
        //                         'email' => $email
        //                     ]
        //                 );
        //             }
        //         } else {
        //             // Atualiza a senha do usuário
        //             // $user->password = Hash::make($confirmCode);
        //             // $user->save();

        //             // \Illuminate\Support\Facades\Mail::to($email)->send(
        //             //     new \App\Mail\SecuryCode($userName, $confirmCode)
        //             // );

        //             // return view('layouts/confirmCode')->with(['email' => $email]);
        //             return redirect()->route('confirmCode')->with(
        //                 [
        //                     'email' => $email,
        //                     'adm' => $user
        //                 ]
        //             );
        //         }
        //     } else {
        //         $lead = new User();

        //         $lead->name = $newUserName;
        //         $lead->email = $newUserEmail;
        //         $lead->mobile = $newUserMobile;
        //         $lead->password = Hash::make($confirmCode);
        //         $lead->save();

        //         \Illuminate\Support\Facades\Mail::to($email)->send(
        //             new \App\Mail\SecuryCode($userName, $confirmCode)
        //         );

        //         return view('layouts/confirmCode');
        //     }
        // } else {
        //     $email   = $request->email;
        //     return redirect('/')->with('error', 'Email não encontrado!');
        // }
    }
}
