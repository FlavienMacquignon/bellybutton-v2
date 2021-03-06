import React from 'react';


import Contact from '../../HomepageBusiness/Contact';
import Brand from '../Brand';
import Banner from '../../HomepageBusiness/Banner';

import './app.scss';
import Audience from '../Audience';

const App = () => (
  <>
    <Brand />
    <Banner />
    <Audience />
    <div className="container">
    <Contact />
    </div>
  </>
);

export default App;
