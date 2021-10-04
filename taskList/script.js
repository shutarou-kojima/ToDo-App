window.onload = function () {
  let tasks = document
    .getElementsByClassName('task');

  for (let i = 0; i < tasks.length; i++) {
    let id = tasks[i].id.slice(4);
    tasks[i]
      .addEventListener('click', (e) => {location.href = '../updateTask?id=' + id}      );
  }

}