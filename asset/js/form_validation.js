
    function validation(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama         = formulir.nama.value;
        var jeniskelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var message = '';
         
        if (nama == '') {
            message = '-Nama tidak boleh kosong\n';
        }
         
        if (nama != '' && !nama.match(namaValid)) {
            message += '-nama tidak valid\n';
        }
         
        if (jeniskelamin == '') {
            message += '-jenis kelamin harus dipilih\n';
        }
         
        if (email == '') {
            message += '-email tidak boleh kosong\n';
        }
         
        if (email !=''  && !email.match(emailValid)) {
            message += '-alamat email tidak valid\n';
        }
         
        if (message != '') {
            alert('Maaf, ada kesalahan pengisian Formulir : \n'+message);
            return false;
        }
    return true
    }
