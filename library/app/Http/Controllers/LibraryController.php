<?php

/*
 * TODO:
 * 1. Las redirecciones comprobarlas todas y asegurarte de que están bien.
 * 2. Verificar si es admin o user
 *  2.1. Mostrar las vistas en función de lo que sea.
 * 3. Mostrar todos los datos [DONE]
 *  3.1. Paginarlos
 * 4. Crear un préstamo como admin
 * 5. Eliminar como admin.
 * 6. Editar como admin.
 * -----> Controlar campos con middleware
 * */

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Lending;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller {

    public function __constructor() {
        $this->middleware('auth');
    }

    public function getAdminView() {
        $usersWithBooks = User::with('books')->get();
        return view('admins.show.adminView', ['usersWithBooks' => $usersWithBooks]);
    }

    public function createAdminView() {
        return view('admins.create.adminCreate');
    }

    public function editAdminView($id) {
        return view('admins.edit.adminEdit');
    }

    public function getUserView() {
        $usersWithBooks = Book::with('users')->get();
            return view('users.show.userView', ['usersWithBooks' => $usersWithBooks]);
    }
}
