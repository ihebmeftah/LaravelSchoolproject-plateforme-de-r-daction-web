<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show()
    {
        $users = new Account('116151651','iheb meftah','https://github.com/ihebmeftah','51512118','"At vero eos et accusamus et iusto odio
        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
        dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
        sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
        perferendis doloribus asperiores repellat."');




        return view("gererprofil", compact('users'));
    }
}
