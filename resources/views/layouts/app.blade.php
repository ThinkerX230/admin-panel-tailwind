<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 transition">

<div class="flex">

  @include('components.sidebar')

  <div class="flex-1 flex flex-col">

    @include('components.header')

    <main class="p-6 flex-1">
      @yield('content')
    </main>

    @include('components.footer')

  </div>

</div>

<script>

// 🌙 DARK MODE INIT
if (localStorage.getItem('darkMode') === 'true') {
  document.documentElement.classList.add('dark');
}

// 🌐 TRANSLATION DICTIONARY
const translations = {
  id: {
  total_users: "Total Pengguna",
  total_produk: "Total Produk",
  total_order: "Total Pesanan",
  data_users: "Data Pengguna",
  add: "+ Tambah",
  name: "Nama",
  email: "Email",
  user_note: "Menampilkan sebagian data user. Total user: 120."
},

en: {
  total_users: "Total Users",
  total_produk: "Total Products",
  total_order: "Total Orders",
  data_users: "User Data",
  add: "+ Add",
  name: "Name",
  email: "Email",
  user_note: "Showing limited user data. Total users: 120."
}
};
// APPLY TRANSLATION
function applyLanguage(lang) {
  document.querySelectorAll('[data-lang]').forEach(el => {
    const key = el.getAttribute('data-lang');
    if (translations[lang][key]) {
      el.innerText = translations[lang][key];
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {

  // DARK MODE
  const toggle = document.getElementById('darkToggle');
  if (toggle) {
    toggle.checked = localStorage.getItem('darkMode') === 'true';

    toggle.addEventListener('change', () => {
      if (toggle.checked) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('darkMode', 'true');
      } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('darkMode', 'false');
      }
    });
  }

  // LANGUAGE
  const savedLang = localStorage.getItem('lang') || 'id';
  applyLanguage(savedLang);

  const langSelect = document.getElementById('language');
  if (langSelect) {
    langSelect.value = savedLang;

    langSelect.addEventListener('change', () => {
      localStorage.setItem('lang', langSelect.value);
      applyLanguage(langSelect.value);
    });
  }

});

</script>

</body>
</html>