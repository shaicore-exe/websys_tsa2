<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function createForm()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        return view('task_form', [
            'task' => null,
            'formTitle' => 'New Task'
        ]);
    }

    public function create()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $taskModel->insert([
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status') ?: 'Pending',
            'task_date' => $this->request->getPost('task_date'),
            'is_archived' => 0
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $taskModel = new TaskModel();
        $task = $taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        return view('task_form', [
            'task' => $task,
            'formTitle' => 'Edit Task'
        ]);
    }

    public function update($id)
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status') ?: 'Pending',
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task updated successfully.');
    }

    public function archive($id)
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task archived successfully.');
    }
}