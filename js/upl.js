function openFileUploader() {
    // Вызываем клик на скрытом элементе input при нажатии на текст "Загрузить"
    document.getElementById('photoUpload').click();
}

function handleFileUpload(input) {
    // Обработка загруженного файла
    var file = input.files[0];
    if (file) {
        // Здесь вы можете добавить логику обработки загруженного файла
        console.log('Файл загружен:', file.name);

        // Автоматическая отправка формы после выбора файла
        document.getElementById('uploadForm').submit();
    }
}
