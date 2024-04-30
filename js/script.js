var count = 0;

document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = ""; // Очищаем содержимое элемента с id="demo"
    } else {
        // Создаем новый элемент img
        var img = document.createElement("img");
        // Устанавливаем источник изображения
        img.src = "https://kg-portal.ru/img/83874/main_2x.jpg"; // Ошибка: здесь должно быть img.src, а не img.scr
        // Добавляем изображение в параграф
        document.getElementById("demo").appendChild(img);
    }
}
