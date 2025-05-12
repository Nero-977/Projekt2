document.getElementById('reg_name').addEventListener('input', function(e) {
    const input = e.target.value;
    const errorPopup = document.getElementById('reg_name_popup');
    
  // Alles außer ö, ü, ä und Leerzeichen erlauben
  const forbiddenPattern = /[öüäÖÜÄ\s]/;
    
    if (forbiddenPattern.test(input)) {
      errorPopup.style.display = 'block';
      
  // Ungültige Zeichen entfernen (ö, ü, ä und Leerzeichen)
      e.target.value = input.replace(/[öüäÖÜÄ\s]/g, '');
    } else {
      errorPopup.style.display = 'none';
    }
  });