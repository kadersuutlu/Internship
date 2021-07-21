/**
 * @format
 */

// import {Text, AppRegistry} from 'react-native';
// import React from 'react';
// import Header from './src/components/Header';
import 'react-native-gesture-handler';
import{AppRegistry} from 'react-native';
import Home from './src/screens/Home/Home';
import {name as appName} from './app.json';


AppRegistry.registerComponent(appName, () => Home);

