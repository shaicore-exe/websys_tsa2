<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
	public function index()
	{
		$taskModel = new TaskModel();

		$today = date('Y-m-d');

		$data['tasks'] = $taskModel
		->where('task_date', $today)
		->where('is_archived', 0)
		->findAll();
		return view('welcome', $data);
	}

	public function tasks()
	{
		$taskModel = new TaskModel();
		
		$data['tasks'] = $taskModel
		->where('is_archived', 0)
		->orderBy('task_date', 'ASC')
		->findAll();

		return view('tasks', $data);
	}

	public function profile()
	{
		$userModel = new UserModel();
		
		$data['user'] = $userModel->first();

		return view('profile', $data);
	}

	public function about()
	{
		return view('about');
	}
}