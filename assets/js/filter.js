resultats = [];
entreprises = document.getElementsByClassName('entreprise');
descriptions = document.getElementsByClassName('description');
entLength = entreprises.length;
for(i=0; i<entLength; i++){
    nomEntreprise = entreprises[i].getElementsByClassName('nom')[0].innerHTML;
    descriptionEntreprise = descriptions[i].getElementsByClassName('descritpiton')[0].innerHTML;
    if(nomEntreprise.includes(terme) || descriptionEntreprise.includes(terme)){
        // What's next?
        resultats.push(entreprises[i]);
    }
}
