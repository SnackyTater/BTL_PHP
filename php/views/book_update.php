<form method="POST" enctype="multipart/form-data">
    <div class="add-book-form">
        <h1 class="add-book-header">Add Book Form</h1>
        <p class="add-book"><label>Book Image: </label><br>
        <input class="right" type="file" name="BookImage" value="BookImage">

        <p class="add-book"><label>Title: </label><br>
        <input type="text" name="bookName" placeholder="Book Name"><br>
        
        <p class="add-book"><label>Gerne: </label><br>
        <input type="text" name="gerne" placeholder="Gerne"><br>
        
        <p class="add-book"><label>Author: </label><br>
        <input type="text" name="author" placeholder="Author"><br>
        
        <p class="add-book"><label>Book Description: </label><br>
        <input type="text" name="bookDescription" placeholder="Decription"><br>

        <p class="add-book"><label>Price: </label><br>
        <input type="number" name="price" placeholder="Price"><br>

        <input class="add-submit" name = "newBook" type="submit" value="Add Book">
    </div>
</form>