<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'Pedro',
            'lastname'=>'Paiva',
            'login'=>'vsppaiva',
            'cpfcnpj'=>'096.147.244-80',
            'email'=>'admin@mail.com',
            'telefone'=>'',
            'password'=>bcrypt('root'),
        ];
        
        if(User::where('email','=',$dados['email'])->count()) {
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario alterado com sucesso!";
        } else {
            User::create($dados);
            echo "Usuario registrado com sucesso!";
        }
    }
}
