"use strict"

let id=0;

$(document).ready(function(){
	let _signIn=$("#signIn");
	let _tableDischi=$("#tableDischi");

	let _richiestaDischi = inviaRichiesta("get", "server/elencoDischi.php");

	_signIn.on("click",function () {
        let _richiestaLogout = inviaRichiesta("POST", "server/logout.php");
        _richiestaLogout.fail(error);
        _richiestaLogout.done(function (data) {
            if (data["ok"]==true){
                window.location.href="login.html";
            }
        });
	});

	_richiestaDischi.fail(function(jqXHR, test_status, str_error) {
		if (jqXHR.status == 403) {
			window.location.href="login.html";
		}
		else
			error(jqXHR, test_status, str_error)
	});

	_richiestaDischi.done(function (data) {
		console.log(data)
		// dischi

		for (let record of data.data){
			let _tr=$("<tr>").appendTo(_tableDischi);
			for (let i=0;i<4;i++){
				if(i==0){
					let _td=$("<td>");
					let _a=$("<a>",{
						"id":(record.id-1),
						"title":record.titolo+" - Click for Info"
					}).on("click",function () {
                        id=$(this).prop("id");
                        window.open("informazioni.php?id="+id);
                    }).appendTo(_td);
					let _img=$("<img>",{
						"src":record.img,
                        "width":"100px"
					}).appendTo(_a);
					_td.appendTo(_tr);
				}
				else if(i==1){
					let _td=$("<td>",{
						"html":record.autore
					}).appendTo(_tr);
				}
				else if(i==2){
					let _td=$("<td>",{
						"html":record.titolo
					}).appendTo(_tr);
				}
				else if(i==3){
					let _td=$("<td>",{
						"html":record.anno
					}).appendTo(_tr);
				}
			}
		}
	});
});