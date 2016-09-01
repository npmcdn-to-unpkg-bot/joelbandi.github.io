import React from 'react'
import ReactDOM from 'react-dom';


class Sample extends React.Component{
    render(){
        return (
            <h2>React</h2>
        )
    }
}

ReactDOM.render(<Sample/>,document.getElementById('sample'));