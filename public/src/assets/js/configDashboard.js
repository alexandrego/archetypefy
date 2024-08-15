function openPopup() {
    document.getElementById("userSearchPopup").style.display = "block";
}

function closePopup() {
    document.getElementById("userSearchPopup").style.display = "none";
}

function searchUsers() {
    var searchTerm = document.getElementById("searchInput").value;
    // Aqui você deve adicionar a lógica para buscar usuários no banco de dados usando o searchTerm
    // e exibir os resultados no elemento com id "searchResults"
}
