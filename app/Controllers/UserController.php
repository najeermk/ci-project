<?php 
namespace App\Controllers;  
use App\Models\User;
  
class UserController extends BaseController
{

	public function dashboard()
    {
        $session = session();
        return view('user\dashboard', $session);
    }

	public function register() 
	{
		return view('user\register');
	}

	public function signup()
	{
		$rules = [
            'name'          => 'required|min_length[3]|max_length[50]',
            'email'         => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[8]|max_length[100]',
        ];
          
        if($this->validate($rules)){
			$user = new User();
			$data = [
				'name' => $this->request->getVar('name'),
				'email' => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			$user->save($data);
			return redirect()->to('user/signin');
		} else {
			$data['validation'] = $this->validator;
			return view('user/register', $data);
		}
	}

	public function signin()
	{
		return view('user\signin');
	}

	public function signupAuth()
	{
		$session = session();
        $user = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $user->where('email', $email)->first();
        
        if($data){
            if(password_verify($password, $data['password'])){
                $session_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => true
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('user/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('user/signin');
        }
	}

}
