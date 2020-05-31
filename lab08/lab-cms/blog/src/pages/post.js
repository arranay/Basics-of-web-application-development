import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout' 

const PostTemplate = ({ data }) => (
  <Layout>
    <h1>{data.strapiPosts.tittle}</h1>
    <h3>Автор: {data.strapiPosts.author.login}</h3>
    <h3>Категория: {data.strapiPosts.category.categoryName}</h3>
    <p>{data.strapiPosts.content}</p>
  </Layout>
)

export default PostTemplate

export const query = graphql`
  query PostTemplate($id: String) {
    strapiPosts(id: {eq: $id}) {
      tittle
      content
      author {
        id
        login
      }
      category{
        id
        categoryName
      }
    }
  }
`