import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout'

const AuthorTemplate = ({ data }) => (
    <Layout>
      <p><h1>{data.strapiAuthors.login}</h1>
      <h3>{data.strapiAuthors.email}</h3></p>

      <ul>
      {data.strapiAuthors.posts.map(document => (
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
  
export default AuthorTemplate

export const query = graphql`
  query AuthorTemplate($id: String) {
    strapiAuthors(id: { eq: $id }) {
      id
      login
      email
      posts{
        id 
        tittle
        description
      }
    }
  }
` 