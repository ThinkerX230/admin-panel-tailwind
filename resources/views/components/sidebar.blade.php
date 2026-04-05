<aside class="w-64 h-screen bg-gray-800 dark:bg-gray-900 text-white flex flex-col">

  <div class="p-5 text-2xl font-bold border-b border-gray-700">
    Admin Panel
  </div>

  <nav class="flex-1 p-4">
    <ul class="space-y-2">

      <li>
        <a href="/" class="flex items-center p-2 rounded hover:bg-gray-700 {{ request()->is('/') ? 'bg-gray-700' : '' }}">
          🏠 <span data-lang="dashboard">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="/users" class="flex items-center p-2 rounded hover:bg-gray-700 {{ request()->is('users') ? 'bg-gray-700' : '' }}">
          👤 <span data-lang="users">Users</span>
        </a>
      </li>

      <li>
        <a href="/settings" class="flex items-center p-2 rounded hover:bg-gray-700 {{ request()->is('settings') ? 'bg-gray-700' : '' }}">
          ⚙️ <span data-lang="settings">Settings</span>
        </a>
      </li>

    </ul>
  </nav>

</aside>