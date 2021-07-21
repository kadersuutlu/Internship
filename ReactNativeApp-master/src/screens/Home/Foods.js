import React, { Component } from 'react';
import {FlatList, SafeAreaView, StyleSheet, View, Text} from 'react-native';
import Home from './Home';
import Desserts from './Dessert';
import Drinks from './Drinks';
import Foods from './Foods';
import Vegetables from './Vegetables';

export default class Foods extends Component{
    render(){
        return(
            <view style={styles.backgroundColor}>
                <text style={styles.welcome}>Foods.js</text>
            </view>
        )
    }
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: 'white',
  },
  itemStyle: {
    padding: 10
  }
});
