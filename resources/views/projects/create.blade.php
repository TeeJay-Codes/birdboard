<html>
    <head></head>
    <body>
        <h1>Create new Project</h1>
        <form action="/projects" method="POST">
            @csrf
            <input type="text" name="title">
            <textarea name="description">
            </textarea>
            <input type="submit">
        </form>
    </body>
</html>
