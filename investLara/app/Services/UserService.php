<?php
namespace App\Services;

use Illuminate\Database\QueryException;
use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;

class UserService
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function store($data)
    {
        try{
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);

            // dd($usuario);

            return [
                'success'  => true,
                'messages' => "Usuário cadastrado com Sucesso!!!",
                'data'     => $usuario,
            ];

        }catch(Exception $e){
            switch(get_class($e)){
                case QueryException::class     : return ['success' => false, 'messages' =>  $e->getMessage()];
                case ValidatorException::class : return ['success' => false, 'messages' =>  $e->getMessageBag()];
                case Exception::class          : return ['success' => false, 'messages' =>  $e->getMessage()];
                default                        : return ['success' => false, 'messages' =>  $e->getMessage()];
            }
            // return [
            //     'success'  => false,
            //     // 'messages' => "Erro ao executar o cadastro!!",
            //     'messages' => $e->getMessageBag(),
            // ];
        }
    }
    public function update()
    {

    }
    public function destroy($user_id)
    {
        try{
            $this->repository->delete($user_id);

            // dd($usuario);

            return [
                'success'  => true,
                'messages' => "Usuário removido com Sucesso!!!",
                'data'     => null,
            ];

        }catch(Exception $e){
            switch(get_class($e)){
                case QueryException::class     : return ['success' => false, 'messages' =>  $e->getMessage()];
                case ValidatorException::class : return ['success' => false, 'messages' =>  $e->getMessageBag()];
                case Exception::class          : return ['success' => false, 'messages' =>  $e->getMessage()];
                default                        : return ['success' => false, 'messages' =>  $e->getMessage()];
            }
        }
    }
    
    
}