<?php

namespace App\Contracts\Admin;

interface ServiceInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function toggleStatus($status, $id);
}
