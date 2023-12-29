var div = document.getElementsByClassName('img-div');
var img = document.getElementById('img');
let num;

function productNum(num_p){
	num = num_p;
}

function imgClick(id_img) {
	if(num!=undefined){	
		for(let i = 0; ; i++){
			let n = parseInt(id_img) + 1;
			img.src = '../Images/img-pages/product_'+num+'/image_'+n+'.svg';
			div[i].classList.remove("this-img");
			div[id_img].classList.add("this-img");
			if(i == 3){
				i = 0;
			}		
		}	
	}
}