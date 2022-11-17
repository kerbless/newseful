function source1(){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            document.getElementById("source1").innerHTML = this.responseText;
        }
    };
    x.open("GET", "https://newsapi.org/v2/everything?q=tesla&from=2022-10-17&sortBy=publishedAt&apiKey=9c75b62001f949ee9e1f679c566ba6c4", true);
    x.send();
}
