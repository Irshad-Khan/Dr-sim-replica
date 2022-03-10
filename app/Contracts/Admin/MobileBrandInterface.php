<?php

namespace App\Contracts\Admin;

interface MobileBrandInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function toggleStatus($status, $id);
    public function upload($request);
}
