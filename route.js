// routes.js
import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import ItemList from './components/ItemList';
import NewItem from './components/NewItem';

const Routes = () => {
  return (
    <Router>
      <Switch>
        <Route exact path="/" component={ItemList} />
        <Route path="/new-item" component={NewItem} />
      </Switch>
    </Router>
  );
};

export default Routes;
