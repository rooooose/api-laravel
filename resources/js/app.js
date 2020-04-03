require('./bootstrap');

import Map_countries from './map';

class App {
    constructor () {
        this.initApp();
    }

    initApp () {
      // Start application
      new Map_countries();
      
      
    }
}

new App();