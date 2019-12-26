var request = new XMLHttpRequest();

request.open('GET', 'https://raw.githubusercontent.com/yusufsyaifudin/wilayah-indonesia/master/data/list_of_area/indonesia-region.min.json', true);
var data;
request.onload = function () {

  // Begin accessing JSON data here
  data = JSON.parse(this.response);

  if (request.status >= 200 && request.status < 400) {
     data = JSON.parse(this.response);
      for (i in data) {
        var tes = "<option value='"+data[i].name+"'>"+data[i].name+"</option>"
        document.getElementById('provinsi').innerHTML += tes;
      }
}
}

request.send();

function pilihKabupaten(){
  var provinsi = document.getElementById('provinsi').value;
  for(i in data){
    if(data[i].name==provinsi){
      for(j in data[i].regencies){
       var kab = "<option value='"+data[i].regencies[j].name+"'>"+data[i].regencies[j].name+"</option>"
        document.getElementById('kabupaten').innerHTML += kab;
    }
  }
}
}

function pilihKecamatan(){
  var kabupaten = document.getElementById('kabupaten').value;
  var provinsi = document.getElementById('provinsi').value;
  for(i in data){
    if(data[i].name==provinsi){
      for(j in data[i].regencies){
        if (data[i].regencies[j].name==kabupaten) {
          for(k in data[i].regencies[j].districts){
            var kec = "<option value='"+data[i].regencies[j].districts[k].name+"'>"+data[i].regencies[j].districts[k].name+"</option>"
            document.getElementById('kecamatan').innerHTML += kec;
          }
       }
    }
  }
}
}

function pilihKelurahan(){
  var kabupaten = document.getElementById('kabupaten').value;
  var provinsi = document.getElementById('provinsi').value;
  var kecamatan = document.getElementById('kecamatan').value;
  for(i in data){
    if(data[i].name==provinsi){
      for(j in data[i].regencies){
        if (data[i].regencies[j].name==kabupaten) {
          for(k in data[i].regencies[j].districts){
            if(data[i].regencies[j].districts[k].name==kecamatan){
              for(l in data[i].regencies[j].districts[k].villages){
                var kel = "<option value='"+data[i].regencies[j].districts[k].villages[l].name+"'>"+data[i].regencies[j].districts[k].villages[l].name+"</option>"
                document.getElementById('kelurahan').innerHTML += kel;
              }
            }
          }
       }
    }
  }
}
}

