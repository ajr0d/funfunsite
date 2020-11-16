<?php echo file_get_contents("html/header.html"); ?>


    <div id="myDIV" class="header">
        <h2>AJ's Fun, Fun TODO</h2>
        <input type="text" id="myInput" placeholder="Add TODO here...">
        <span onclick="newElement()" class="addBtn">Add</span>
    </div>

    <ul class="todo-list" id="myUL">
        
    </ul>
    <script src="scripts/todo.js"></script>
<?php echo file_get_contents("html/footer.html"); ?>