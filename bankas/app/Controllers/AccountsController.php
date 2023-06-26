<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;
use Bank\IbanId;
use Bank\OldData;
use Bank\Messages;


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
        $old = OldData::getFlashData() ?? [];

        $firstname = $old['firstName'] ?? '';
        $lastName = $old['lastName'] ?? '';
        $personalId = $old['personalId'] ?? '';
        $iban = $old['iban'] ?? IbanId::generateLithuanianIBAN();
        
        return App::view('accounts/create', [
            'pageTitle' => 'Pridėti sąskaitą',
            'firstName' => $firstname,
            'lastName' => $lastName,
            'personalId' => $personalId,
            'iban' => $iban,
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('account');
        $data->create($request);

        Messages::addMessage('success', 'Nauja sąskaita sėkmingai pridėta');
        header('Location: /accounts');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        $id = $account['id'];
        $firstName = $account['firstName'];
        $lastName = $account['lastName'];
        $personalId = $account['personalId'];
        $iban = $account['iban'];

        return App::view('accounts/edit', [
            'pageTitle' => 'Redaguoti sąskaitą',
            'id' => $id,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'personalId' => $personalId,
            'iban' => $iban
        ]);
    }

    public function update(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->update($id, $request);    

        Messages::addMessage('success', 'Sąskaitos duomenys atnaujinti');
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

        Messages::addMessage('success', 'Sąskaita sėkmingai ištrinta');
        header('Location: /accounts');
    }

}