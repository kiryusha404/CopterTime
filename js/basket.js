function ArrAdd(i){

	let name = document.getElementById('LCN' + i).textContent;//Забираем название i-го элемента из html кода
	let price = document.getElementById('LCC' + i).textContent;//Аналогично забираем цену
	let img = document.getElementById('LCI' + i).getAttribute('src');//Аналогично забираем url картинки
    let id = i;
	let ArrJson = //задаем структуру данных о i-м товаре
	{
		'name': name,
		'price': price,
		'img': img,
		'col': 1,
        'id': id
	};

	if(!localStorage.getItem('ArrayProducts'))//создание переменной json в localStorage
	{
		localStorage.setItem('ArrayProducts', '[' + JSON.stringify(ArrJson) + ']');
	}
	else if(SearcheElement(name))//В случае если в массиве нет такого же элемента добавляем его
	{
		let json = localStorage.getItem('ArrayProducts');//Забираем json из localStorage
		json = json.substring(0, json.length - 1);//Удаляем ']' в конце строки
		json += ',' + JSON.stringify(ArrJson);//Добавляем элемент в json
		localStorage.setItem('ArrayProducts', json + ']');//Сохраняем json
	}
}

/*Поиск элемента в json по имени (true : false)*/
function SearcheElement(name)
{
	let arr = JSON.parse(localStorage.getItem('ArrayProducts'));

    for(let i = 0; i < arr.length; i++)
	{
		if(name == arr[i]['name']) return false;
	}
	return true;
}

/*Уеличиваем число продукта в корзине*/
function IncreaseProduct(id)
{
	let arr1 = JSON.parse(localStorage.getItem('ArrayProducts'));
	arr1[id]['col']++;
	let str1 = JSON.stringify(arr1);
	localStorage.setItem('ArrayProducts', str1);
	window.location.href = 'basket';
}

/*Уменьшаем число продукта в корзине*/
function DecreaseProduct(id)
{
	let arr1 = JSON.parse(localStorage.getItem('ArrayProducts'));
	if(arr1[id]['col'] != 1) 
	{
		arr1[id]['col']--;
		let str1 = JSON.stringify(arr1);
		localStorage.setItem('ArrayProducts', str1);
		window.location.href = 'basket';
	}
}

/*Удаляем продукт*/
function DeleteProduct(id)
{
	let arr1 = JSON.parse(localStorage.getItem('ArrayProducts'));
	if(arr1.length == 1)
	{
		localStorage.clear();
	}
	else{
		let str1 = '';
		for(let i = 0, j = 0; i < arr1.length;)
		{
			if(!(i == id)) str1 += JSON.stringify(arr1[i]) + ',';
			else j++;
			i++;
		}
		str1 = str1.substring(0, str1.length - 1);
		localStorage.setItem('ArrayProducts', '[' + str1 + ']');
	}
	window.location.href = 'basket';
}

/*Считаем сумму всех товаров в корзине*/
function SumPrice()
{
	if(!localStorage.getItem('ArrayProducts'))
	{
		return 0;
	}
	else
	{
		let sum = 0;
		let arr1 = JSON.parse(localStorage.getItem('ArrayProducts'));
		for(let i = 0; i < arr1.length; i++)
		{
			sum += arr1[i]['col'] * arr1[i]['price'];
		}
		return sum;
	}
}
