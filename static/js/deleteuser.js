function confirmDelete() {
    var result = confirm("Tem certeza de que deseja excluir o usuário?");
    if (result) {
        document.getElementById("deleteForm").submit();
    }
}