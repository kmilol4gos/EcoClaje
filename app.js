fetch('listar.php')
.then(res => res.json())
.then(data => {

    console.log(data);
/*
    let str = '';
    data.map(item => {
        str += `
            <tr>
                <td>${item.id}</td>
            </tr>
        `
    })
    console.log(data);*/
});