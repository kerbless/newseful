function nav_bar(){
    document.write(`
    <header class="home">
        <a href="index.html">Home</a>
        <a href="login.html">Login</a>
        <a href="sigin.html">Sigin</a>
        <div class="searchbar">
            <form>
                <input type="text" placeholder="Search.." name="search">
                <input type="submit" value="cerca">
            </form>
        </div>
    </header>
    `);
}

nav_bar();