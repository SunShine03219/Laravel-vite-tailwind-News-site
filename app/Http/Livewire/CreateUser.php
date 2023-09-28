<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class CreateUser extends Component
{
    public $account_types = ['Admin', 'Editor'];

    public $account_type = '';
    public $name = '';
    public $email = '';
    public $phone = '';
    public $cpf = '';
    public $password = '';
    public $password_confirmation = '';

    protected function rules()
    {
        return [
            'account_type' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string', 'max:12'],
            'cpf' => ['required', 'string', 'max:11'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'cpf' => $this->cpf,
        ]);
        
        switch ($this->account_type) {
            case $this->account_types[0]:
                $user->assignRole('Admin');
                break;
            case $this->account_types[1]:
                $user->assignRole('Editor');
                break;
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
