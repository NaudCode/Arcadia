
document.addEventListener('DOMContentLoaded', function () {
  // Retrieve elements
  const buttons = document.querySelectorAll('.circle-button');
  const descriptionElement = document.getElementById('description');
  const images = document.querySelectorAll('.animal-image');
  const infoDivs = document.querySelectorAll('.animal-info');
  const rows = document.querySelectorAll('.animal-row');

  // Habitat descriptions
  const descriptions = {
    jungle: "Aventurez-vous dans la dense jungle tropicale, où les singes se balancent de branche en branche et où les jaguars se fondent dans la végétation luxuriante. Écoutez les chants des oiseaux exotiques et observez les insectes colorés qui peuplent cet écosystème riche et diversifié.",
    marais: "Découvrez les mystères des marais, où les alligators guettent leurs proies et où les hérons élégants se tiennent immobiles au bord de l'eau. Explorez les paysages humides et luxuriants, peuplés de tortues, de grenouilles et d'une multitude d'oiseaux aquatiques.",
    savane: "Plongez dans les vastes étendues de la savane, où les lions majestueux règnent en maîtres et où les girafes élégantes se promènent parmi les acacias. Observez les zèbres parcourir les plaines herbeuses sous le soleil brûlant."
  };


  // Handle button clicks
  buttons.forEach(button => {
    button.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent redirection
      const habitat = button.getAttribute('data-habitat'); // Get habitat type
      descriptionElement.textContent = descriptions[habitat] || "Description not available."; // Display description
      filterAnimals(habitat); // Filter animals based on habitat
    });
  });

  // Hide animal info on page load
  infoDivs.forEach(infoDiv => {
    infoDiv.style.display = 'none';
  });

  // Handle image clicks to toggle animal info visibility
  images.forEach(image => {
    image.addEventListener('click', function () {
      const infoDiv = this.closest('.row').querySelector('.animal-info');
      const isInfoVisible = infoDiv.style.display === 'block';
      infoDiv.style.display = isInfoVisible ? 'none' : 'block';
    });
  });

  // Function to filter animals by habitat
  function filterAnimals(habitat) {
    rows.forEach(row => {
      if (habitat) {
        row.style.display = row.getAttribute('data-habitat') === habitat ? 'flex' : 'none';
      } else {
        row.style.display = 'flex';
      }
    });
  }

  // Show all animals by default on page load
  filterAnimals();
});

  
