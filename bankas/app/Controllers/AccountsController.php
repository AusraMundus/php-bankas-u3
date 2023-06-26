<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;


class AccountsController
{
    public function index()
    {
        $data = new FileWriter('account');
        
        return App::view('accounts/index', [
            'pageTitle' => 'Sąskaitų sąrašas',
            'accounts' => $data->showAll(),
        ]);
    }

    public function create()
    {
        return App::view('accounts/create', [
            'pageTitle' => 'Pridėti sąskaitą',
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('account');
        $data->create($request);

        header('Location: /accounts');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        return App::view('accounts/edit', [
            'pageTitle' => 'Redaguoti sąskaitą',
            'account' => $account,
        ]);
    }

    public function update(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->update($id, $request);

        header('Location: /accounts');
    }

    public function delete(int $id)
    {
        $account = (new FileWriter('account'))->show($id);
        return App::view('accounts/delete', [
            'pageTitle' => 'Ištrinti sąskaitą',
            'account' => $account,
        ]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('account');
        $data->delete($id);

        header('Location: /accounts');
    }

}