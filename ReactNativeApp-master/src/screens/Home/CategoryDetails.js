import React from 'react';
import {View, Text, Image} from 'react-native';
import Item from './Item';
import ItemSection from './ItemSection';
import Button from '../../components/Button/Button';

const CategoryDetails = ({category}) => {
  const {headerContainer, headerText, imageStyle} = styles;

  return (
    <Item>
      <ItemSection>
        <View style={headerContainer}>
          <Text style={headerText}>{category.category}</Text>
          {/* <Text style = {headerText}>{category.category}</Text> */}
        </View>
      </ItemSection>
      <ItemSection>
        <Image style={imageStyle} source={{uri: category.image}} />
      </ItemSection>
      <ItemSection>
        <Button buttonPress = {() => {
          console.log(category.category);
        }}/>
      </ItemSection>
    </Item>
  );
};

const styles = {
  headerContainer: {
    flexDirection: 'column',
    justifyContent: 'space-between',
  },

  headerText: {
    fontSize: 18,
    fontWeight: '500',
    textTransform: 'uppercase',
  },

  imageStyle: {
    height: 300,
    flex: 1,
    width: 0,
  },
};
export default CategoryDetails;
