import React from 'react'  
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"

const IndexPage = ({ data }) => ( 
  <Layout> 
  <div>
    <p>
      <h3>Лабораторная работа №8.</h3>
      <h3>Основы разработки с Headless CMS.</h3>
    </p>
    <ul>
      {data.allStrapiPosts.edges.map(document => (
        <li key={document.node.id}>
          <font color="yellowgreen">
            <h4><Link to={`/${document.node.id}`}>{document.node.tittle}</Link></h4>
            <h4>Автор: {document.node.author.login}</h4>
            <h4>Категория: {document.node.category.categoryName}</h4>
          </font>
          <p>{document.node.description}</p>
        </li>
      ))}
    </ul>
  </div>
  </Layout>
)
export default IndexPage
export const pageQuery = graphql`  
  query IndexQuery {
    allStrapiPosts {
      edges {
        node {
          id
          tittle
          description
          author{
            id
            login
          }
          category{
            id
            categoryName
          }
        }
      }
    }
  }
`