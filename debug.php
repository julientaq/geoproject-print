<style>
:root {
  --color-primary: orange;
}
section {
    break-before: page;
    border: 2px solid black;
    margin: 2em auto;
    max-width: 800px;
    padding: 1em;

  }

  .marker .content::before {
    content: 'contenu du marqueur';
    color: red;
    letter-spacing: 1ch;
    font-family: sans-serif;
    text-transform: uppercase;
  }

  .map {
    background: yellow;
  }


  .marker {
    background: orange;
  }

  .marker .meta::before {
    content: 'meta données du marqueur';
    color: green;
    letter-spacing: 1ch;
    font-family: sans-serif;
    text-transform: uppercase;
  }

  .marker .popup::before {
    content: 'popup stuff';
    color: purple;
    letter-spacing: 1ch;
    font-family: sans-serif;
    text-transform: uppercase;
  }

  img {
    max-width: 200px;
    height: auto;
  }

  .key {
    font-family: sans-serif;
    margin-right: 1em;
  }

  .map-container,
  .capes-container {
    height: 20em;
    width: 100%;
    background: purple;
  }

  @media print {
    .leaflet-control-container {
      display: none;
    }
  
  }
</style>