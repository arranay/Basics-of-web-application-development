import React from 'react'  
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"

const IndexPage = ({ data }) => ( 
  <Layout> 
  <div>
    <p>Лабораторная работа №8.</p>
    <p>Основы разработки с Headless CMS.</p>
    <ul>
      {data.allStrapiPosts.edges.map(document => (
        <li key={document.node.id}>
          <h2><font color="#3AC1EF">
            <Link to={`/${document.node.id}`}>{document.node.tittle}</Link>
          </font></h2>
        </li>
      ))}
    </ul>
    <Link to="/page-2/">Go to page 2</Link>
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
        }
      }
    }
  }
`