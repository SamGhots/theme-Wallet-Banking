//  <!-- กําหนดความยาวของ   Side Navigation -->
document.addEventListener("DOMContentLoaded", function() {
  // Get the balance element
  const balance = document.getElementById('balance');

  // Get the height of the balance element including padding and border
  const balanceHeight = balance.offsetHeight;

  // Log the height value to the console
  console.log('Balance height:', balanceHeight);

  // Define additional height to add
  const additionalHeight = 20; // in pixels

  // Calculate the total height including additional height
  const totalHeight = balanceHeight + additionalHeight;

  // Log the total height value to the console
  console.log('Total height including additional pixels:', totalHeight);

  // Set the height of the ::before pseudo-element
  const styleSheet = document.createElement("style");
  styleSheet.type = "text/css";
  styleSheet.innerText = `
.wallet-container::before {
  height: ${totalHeight}px;
}
`;
  document.head.appendChild(styleSheet);
});