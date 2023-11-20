function menu(){
    if (document.getElementById('nav').style.transform == 'translate(0%, 0%)') {
        document.getElementById('nav').style.transform = 'translate(-100%, 0%)';
        document.getElementById('btn').style.transform = 'translate(0, 0)';
        document.getElementById('btn').style.backgroundImage = 'url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAZ0lEQVR4nO3WwQmAQAwF0SlPt/+zC4t9RGxAZRH84DzIPTkEBiRJek8DOlDh04H16pARsGQ9nP0Xh6zAFrBk3cy54zL7P5IkSR9pZjxZ9TsCyrbMeEmSpGzNjCerfkdAnpcZL0kScw7zFAKxsVXx1wAAAABJRU5ErkJggg==)';
    } else {
        document.getElementById('nav').style.transform = 'translate(0%, 0%)';
        document.getElementById('btn').style.transform = 'translate(140px, 0)';
        document.getElementById('btn').style.backgroundImage = 'url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAv0lEQVR4nO2VXQrCMBAGxwtalZY86NkVLP6hN6hQCaQgJdXdsFHEDOQt+02TbBooFP6JBrgBB2ChqFsCJ+AK1FrpLBT2YXSAE9S5MHeo8xlqLk8BEvlY6sc5RbyKBE3JY9IuZCRRRwLvwGbUC7E561SpRJ5N+m4rpUdhvvJsK5XKs0qZONNYw31E2ueUu280V/Piykjuubl0wFxeGfwyfYaa1uCR2KeIjwbPos9QU4Uv3iq3zM/dhdp5irhQ+E0ekyummbane5EAAAAASUVORK5CYII=)';
    }
}