function confirmDelete() {
let links = document.querySelectorAll('.list > td');
for (link of links ) {
    link.addEventListener('click', e => {
        if(!confirm('Deseja realmente remover?')) {
            e.preventDefault();
        }
    })
}
}