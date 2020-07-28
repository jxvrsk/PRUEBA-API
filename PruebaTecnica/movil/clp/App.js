import React, { Component } from 'react';
import { ActivityIndicator, FlatList, Text, View } from 'react-native';

export default class App extends Component {
  constructor(props) {
    super(props);
// declaro las variables
    this.state = {
      data: [],
      Loading: true
    };
  }
// hago la solicitud
  componentDidMount() {
    fetch('https://serene-citadel-62957.herokuapp.com/api/Clp')
      .then((response) => response.json())
      .then((json) => {
        this.setState({ data: json});
      })
      .catch((error) => console.error(error))
      .finally(() => {
        this.setState({ Loading: false });
      });
  }

  render() {
    const { data, Loading } = this.state;
//  muestro los datos
    return (
      <View style={{ flex: 1,padding:130, justifyContent: "center", alignItems: "center"}}>
        {Loading ? <ActivityIndicator/> : (
          <FlatList
            data={data}
            keyExtractor={({ id }, index) => id}
            renderItem={({ item }) => (
              <Text>El precio del bitcoin en clp es de $:{item.clp}</Text>
            )}
          />
        )}
      </View>
    );
  }
};
