import './bootstrap';

const html = document.documentElement;
const themeToggle = document.getElementById('theme-toggle');
const sun = document.getElementById('sun');
const moon = document.getElementById('moon');

// Функция для сохранения выбранной темы в локальное хранилище
function saveThemePreference(isDarkMode) {
    localStorage.setItem('darkMode', JSON.stringify(isDarkMode));
}

// Добавляем слушатель события на кнопку переключения темы
themeToggle.addEventListener('click', function() {
    html.classList.toggle('dark'); // Переключаем класс 'dark'
    const isDarkMode = html.classList.contains('dark');
    saveThemePreference(isDarkMode); // Сохраняем выбранную тему в локальное хранилище

    // Переключаем отображение SVG-изображений в зависимости от выбранной темы
    if (isDarkMode) {
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
    } else {
        sun.classList.remove('hidden');
        moon.classList.add('hidden');
    }
});

// Функция для загрузки сохраненной темы при загрузке страницы
function loadThemePreference() {
    const isDarkMode = JSON.parse(localStorage.getItem('darkMode'));
    if (isDarkMode) {
        html.classList.add('dark');
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
    } else {
        html.classList.remove('dark');
        sun.classList.remove('hidden');
        moon.classList.add('hidden');
    }
}

// Вызываем функцию загрузки сохраненной темы при загрузке страницы
document.addEventListener('DOMContentLoaded', loadThemePreference);