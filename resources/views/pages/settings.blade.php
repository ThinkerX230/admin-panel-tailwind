@extends('layouts.app')

@section('title', 'Settings')

@section('content')

<div class="bg-white dark:bg-gray-800 p-6 rounded shadow max-w-md space-y-6">

  <h2 class="text-xl font-semibold text-gray-700 dark:text-white" data-lang="settings">
    Settings
  </h2>

  <!-- DARK MODE -->
  <div class="flex justify-between items-center">
    <span class="text-gray-700 dark:text-gray-300" data-lang="dark_mode">
      Dark Mode
    </span>
    <input type="checkbox" id="darkToggle">
  </div>

  <!-- LANGUAGE -->
  <div>
    <label class="text-gray-700 dark:text-gray-300" data-lang="language">
      Language
    </label>

    <select id="language" class="w-full border p-2 rounded dark:bg-gray-700 dark:text-white">
      <option value="id">Indonesia</option>
      <option value="en">English</option>
    </select>
  </div>

</div>

@endsection