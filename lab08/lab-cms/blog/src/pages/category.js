import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout'

const CategoryTemplate = ({ data }) => (
    <Layout>
      <p><h1>{data.strapiCategories.categoryName}</h1>
       <h3>{data.strapiCategories.Description}</h3></p>

       <ul>
      {data.strapiCategories.posts.map(document => (
        <li key={document.id}>
          <font color="yellowgreen">
            <h4><Link to={`/Posts_${document.id}`}>{document.tittle}</Link></h4>
          </font>
          <p>{document.description}</p>
        </li>
      ))}
    </ul>
    </Layout>
  )
  
export default CategoryTemplate 

export const query = graphql`
  query CategoryTemplate ($id: String!) {
    strapiCategories(id: { eq: $id }) {
      id
      categoryName
      Description
      posts{
        id 
        tittle
        description
      }
    }
  }
` 