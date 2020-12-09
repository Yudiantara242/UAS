var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombolcari');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function(){
    //console.log(keyword.value);
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/pegawai.php?keyword=' + keyword.value, true);
    xhr.send();

});